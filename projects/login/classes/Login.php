<?php

class Login
{
    public function registrazione($credenziali)
    {
        $username = $credenziali["user"];
        $password = password_hash($credenziali["pass"], PASSWORD_BCRYPT);

        if($this->controlloUsername($username)) {
            $sql = "INSERT INTO utenti (username, password) VALUES (?, ?);";
            $this->connect($sql, "ss", [$username, $password]);
            return "Registrazione effettuata.";
        }
        else return "L'username esiste già.";
    }

    public function controlloUsername($username)
    {
        $sql = "SELECT * FROM utenti WHERE username = ?;";
        $result = $this->connect($sql, "s", [$username]);
        return $result->num_rows === 0;
    }

    public function accesso($credenziali)
    {
        // Controllo dell'username, se esiste
        // Controllo della password se è corretta
        // Se uno dei due è falso, dire che username O password è sbagliata.

        // Salvare in sessione
    }

    public function disconnessione() {

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
