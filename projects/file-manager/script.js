const selectfile = document.getElementById('selectfile');

const dropzone = document.getElementById("drop_file_zone");
var counter = 0;

const droptext = document.getElementById("drop_zone_text");
const elenco = document.getElementById("elenco_upload");

dropzone.addEventListener("dragenter", function(e)
{
  e.preventDefault();
  counter++;
  droptext.textContent = "Drop it like it's hot!";
  dropzone.classList.add("bg-blue-50", "text-blue-400", "border-blue-300");
});

dropzone.addEventListener("dragleave", function(e)
{
  counter--;
  if (counter === 0) {
    droptext.textContent = "Clicca o trascina qui i file";
    dropzone.classList.remove("bg-blue-50", "text-blue-400", "border-blue-300");
  }
});

function upload_file(e)
{
  e.preventDefault();
  counter = 0;
  droptext.textContent = "Clicca o trascina qui i file";
  dropzone.classList.remove("bg-blue-50", "text-blue-400", "border-blue-300");
  for (i = 0; i < e.dataTransfer.files.length; i++)
  {
    let div = document.createElement("div");
    div.classList.add("group", "relative", "flex", "flex-col", "justify-end", "h-40", "rounded-xl", "bg-blue-50", "overflow-hidden", "animate-pulse");
    elenco.appendChild(div);
    // elenco.insertBefore(div, elenco.firstChild);
    ajax_file_upload(e.dataTransfer.files[i], div);
  }
}

function file_explorer()
{
  selectfile.click();
  selectfile.onchange = function ()
  {
    let filesLength = selectfile.files.length;
    for (var i = 0; i < filesLength; i++) {
      let div = document.createElement("div");
      div.classList.add("group", "relative", "flex", "flex-col", "justify-end", "h-40", "rounded-xl", "bg-blue-50", "overflow-hidden", "animate-pulse");
      elenco.appendChild(div);
      // elenco.insertBefore(div, elenco.firstChild);
      ajax_file_upload(selectfile.files[i], div); 
    }
  };
}

function ajax_file_upload(file_obj, div_obj)
{
  if (file_obj != undefined)
  {
    var form_data = new FormData();
    form_data.append('file', file_obj);
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "ajax.php", true);
    xhttp.onload = function (event)
    {
      div_obj.classList.remove("animate-pulse");
      div_obj.classList.remove("bg-blue-50");

      let titolo, stato;
      titolo = document.createElement("p");
      stato = document.createElement("span");

      if (xhttp.status == 200 && xhttp.responseText !== "false")
      {
        if(xhttp.responseText.startsWith("image"))
        {
          let filtro = document.createElement("div");
          filtro.id = "filtro";
          filtro.classList.add("absolute", "w-full", "h-full", "bg-black", "opacity-0", "transition", "group-hover:opacity-50", "z-10");
          let img = document.createElement("img");
          img.classList.add("w-full", "h-full", "object-cover", "object-center", "z-0");
          img.src = this.responseText.substring(5);
          img.alt = file_obj.name;
          div_obj.appendChild(filtro);
          div_obj.appendChild(img);
        }
        
        let div = document.createElement("div");
        div.classList.add("absolute", "p-4", "z-20");

        if(xhttp.responseText.startsWith("image"))
        {
          stato.classList.add("font-medium", "text-sm", "text-white", "filter", "drop-shadow-md", "transition-colors", "group-hover:text-gray-300", "group-hover:drop-shadow-none", "group-hover:font-base");
          stato.textContent = "Caricato";

          titolo.classList.add("text-white", "filter", "drop-shadow-md", "font-bold", "transition", "opacity-0", "group-hover:opacity-100", "break-word");
          titolo.textContent = file_obj.name;
        }
        else if(xhttp.responseText.startsWith("text"))
        {
          div_obj.classList.add("bg-blue-50");
          stato.classList.add("text-blue-400", "text-sm", "transition-colors", "group-hover:text-blue-600");
          stato.textContent = "Caricato";

          titolo.classList.add("text-gray-500", "font-bold", "transition-colors", "break-word", "group-hover:text-gray-700");
          titolo.textContent = file_obj.name;
        }

        div.appendChild(titolo);
        div.appendChild(stato);
        div_obj.appendChild(div);
      }
      else
      {
        div_obj.classList.add("bg-red-50");

        let div = document.createElement("div");
        div.classList.add("absolute", "p-4");

        stato.classList.add("text-red-400", "text-sm", "transition-colors", "group-hover:text-red-600");
        stato.textContent = "Errore di caricamento";

        titolo.classList.add("text-gray-500", "font-bold", "transition-colors", "break-word", "group-hover:text-gray-700");
        titolo.textContent = file_obj.name;

        div.appendChild(titolo);
        div.appendChild(stato);
        div_obj.appendChild(div);
      }
    }
    xhttp.send(form_data);
  }
}