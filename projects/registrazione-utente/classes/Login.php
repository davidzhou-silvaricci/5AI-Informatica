<?php

class Login
{
    public function registrazione($credenziali)
    {
        $username = $credenziali["user"];
        $password = password_hash($credenziali["pass"], PASSWORD_BCRYPT);
        $error = false;

        if($this->controlloUsername($username))
        {
            $sql = "INSERT INTO utenti (username, password) VALUES (?, ?);";
            $this->connect($sql, "ss", [$username, $password]);
            $error = false;
        }
        else $error = true;

        return $error;
    }

    public function controlloUsername($username)
    {
        $sql = "SELECT * FROM utenti WHERE username = ?;";
        $result = $this->connect($sql, "s", [$username]);
        return $result->num_rows === 0;
    }

    public function accesso($credenziali)
    {
        $errore = false;

        // Controllo se l'username esiste
        if(!$this->controlloUsername($credenziali["user"]))
        {
            $sql = "SELECT * FROM utenti WHERE username = ?";
            $result = $this->connect($sql, "s", [$credenziali["user"]])->fetch_object();

            // Recupero tutti i dati necessari
            $id = $result->id;
            $username = $result->username;
            $hash = $result->password;
            
            // Controllo se la password è corretta
            if(password_verify($credenziali["pass"], $hash))
            {
                // Salvo i dati nella sessione
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
            }
            else $errore = true;
        }
        else $errore = true;

        return $errore;
    }

    public function logout()
    {
        unset($_SESSION["id"]);
        unset($_SESSION["username"]);
    }

    private function connect($query, $types, $params)
    {
        $connection = new Connection();
        $stmt = $connection->prepare($query);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $connection->close();

        return $result;
    }
}
