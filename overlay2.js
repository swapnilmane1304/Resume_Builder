function changeBackgroundColor(color) {
    document.body.style.backgroundColor = color; // Change body background color
}

function resetBackgroundColor() {
    document.body.style.backgroundColor = ''; // Reset body background color
}

document.getElementById("img").onclick = function () {
    location.href = "resume2.php";
};
document.getElementById("img2").onclick = function () {
    location.href = "resume.html";
};