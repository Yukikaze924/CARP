var dateYear = new Date();
thisYear = dateYear.getFullYear();
document.getElementById('copyrightyear').innerHTML=thisYear;

function logOut(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}