function Dataz() {

    var Name = document.getElementById("Name").value;
    var Surname = document.getElementById("Surname");
    if (Surname ==null) {Surname=""; } else{Surname=Surname.value}
    alert("Registrirali ste se kot " + Name + " " + Surname);
    document.getElementById("Form").submit();
}