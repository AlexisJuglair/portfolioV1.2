function init()
{
  activeLink();
	colorNavbar();
  collapseNav();
	displayTitle();
  submitForm();
}

// Activation des liens du menu au défilement de la page
function activeLink()
{
  const sections = document.querySelectorAll("section");
  const navA = document.querySelectorAll("#navbar-left li a");

  window.onscroll = () => 
  {
    let current = "";

    sections.forEach((section) => 
    {
      if (window.pageYOffset >= section.offsetTop) 
      {
        current = section.getAttribute("id");
      }
    });

    navA.forEach((a) => 
    {
      a.classList.remove("active");

      if (a.getAttribute("href") == "#"+current) 
      {
        a.classList.add("active");
      }
    });
  };
}

// Changement de couleur de la navbar
function colorNavbar() 
{
  let nav = document.getElementById("navbar");
  let items = document.querySelectorAll(".nav-item");
  
  window.addEventListener("scroll", function() 
  {
    if (window.pageYOffset >= document.getElementById("curriculumVitae").offsetTop)
    {
      items.forEach(item => 
      {
          item.querySelector("a").classList.remove("text-primary");
          item.querySelector("a").classList.add("text-custom");
          item.classList.remove("nav-item-custom");
          item.classList.add("nav-item-custom-bis");
      });

      nav.classList.remove("bg-custom");
      nav.classList.add("bg-primary");
    }
    else
    {
      items.forEach(item => 
      {
          item.querySelector("a").classList.add("text-primary");
          item.querySelector("a").classList.remove("text-custom");
          item.classList.remove("nav-item-custom-bis");
          item.classList.add("nav-item-custom");
      });

      nav.classList.remove("bg-primary");
      nav.classList.add("bg-custom");
      nav.style.backgroundColor = "none"; 
    }
  });
}

// Faire défiler/dispparaître le menu en mobile
function collapseNav()
{
  const buttonCollapse = document.getElementById("navbar-toggler");
  const navCollapse = document.getElementById("navbar-collapse");

  // navCollapse.style.display == "none";

  buttonCollapse.addEventListener("click", function() 
  {
    console.log(navCollapse.style.display);
    if (navCollapse.style.display == "none")
    {
      console.log("test3");
      navCollapse.style.display = "flex";
    }
    else
    {
      console.log("test4");
      navCollapse.style.display = "none";
    }
  });
}


// Apparition du h1 lettre par lettre
function displayTitle()
{
  let title = "< Alexis Juglair - Développeur Web />";
  let h1 = document.getElementById("main-title");
  let time = 100;
  let titleP = "<!-- Je développe vos sites vitrines, e-commerces et vos applications web. -->"
  let p = document.getElementById("main-title-p");
  let timeP = 50;
  let btn = document.getElementById("main-title-a");

  for (let i = 0; i < title.length; i++) 
  {
    setTimeout(function() {h1.innerHTML += title[i]}, time);
    time = time + 100;
  } 

  for (let j = 0; j < titleP.length; j++) 
  {
    setTimeout(function() {p.innerHTML += titleP[j]}, timeP);
    timeP = timeP + 50;
  } 

  if (time > timeP)
  {
    setTimeout(function() {btn.style.opacity = 1}, time);
    setTimeout(function() {btn.style.visibility = "visible"}, time);
  }
  else
  {
    setTimeout(function() {btn.style.opacity = 1}, timeP);
    setTimeout(function() {btn.style.visibility = "visible"}, timeP);
  }
}

// Soumission du formulaire de contact (validation JS + PHP)
function submitForm() 
{
  let forms = document.querySelectorAll('.needs-validation');

  forms.forEach(function (form) 
  {
      form.addEventListener('submit', function (event) 
      {
        event.preventDefault();

        if (document.body.contains(document.getElementById("divAlert")))
        {
          document.getElementById("divAlert").remove();
        }

        if (!form.checkValidity()) 
        {         
          event.stopPropagation();
          form.classList.add('was-validated');
        }
        else 
        { 
          form.classList.remove('was-validated');

          let formContact = document.getElementById("formContact");
          let data = new FormData(formContact);
          let ajax = new XMLHttpRequest();
  
          ajax.open("POST","contact.php", true);
  
          ajax.onreadystatechange = function () 
          {
            if(ajax.readyState === 4 && ajax.status === 200) 
            {
              let divAlert = document.createElement("div");
              divAlert.id = "divAlert";
              divAlert.setAttribute("role", "alert");
              document.getElementById("formGroup").insertBefore(divAlert, document.getElementById("buttonContact"));

              let buttonAlert = document.createElement("i");
              divAlert.appendChild(buttonAlert);

              let divAlertBis = document.createElement("div");
              divAlertBis.className = "mx-2";
              divAlert.appendChild(divAlertBis);
              
              if (ajax.responseText == 1)
              {
                formContact.reset();

                divAlert.className = "alert alert-success d-flex";
                buttonAlert.className = "fas fa-check-circle fa-lg";
                divAlertBis.innerText = "Votre message a été envoyé avec succès !"; 

                setTimeout(function() {divAlert.remove();}, 8000);
              }
              else
              {
                divAlert.className = "alert alert-danger d-flex";
                buttonAlert.className = "fas fa-exclamation-triangle fa-lg";
                divAlertBis.innerText = "Le champ "+ajax.responseText+" est invalide !"; 
              }           
            }
          };
  
          ajax.send(data);
        }
      }, false)
  })
}