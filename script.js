document.getElementById("infoForm").onsubmit = function(event) {
    const name = document.getElementById("name").value;
    const mail = document.getElementById("mail").value;
    const branch = document.getElementById("branch").value;
    const section = document.getElementById("section").value;

    if (!name || !mail || !branch || !section) {
        alert("Please fill in all fields.");
        event.preventDefault();
    }
};
