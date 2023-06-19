function setFilename(value) {
    let filename_elem = document.querySelector(".file-name-string");
    if (value == "") {
        filename_elem.textContent = strings["no_file_selected"][localStorage.getItem("language")];
    } else {
        filename_elem.textContent = value.slice(value.lastIndexOf("\\") + 1);
    }
}

document.addEventListener("DOMContentLoaded", function() {
    setFilename("");
});