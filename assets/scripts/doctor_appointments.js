let allData = [];

function openTab(evt, tabName) {
  let i, tabcontent, tablinks;

  // Hide all tab content
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the specific tab content
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

function closeModal(modalId) {
  document.getElementById(modalId).style.display = "none";
}

// Close modals when clicking on X
document.querySelectorAll(".close").forEach((closeBtn) => {
  closeBtn.addEventListener("click", function () {
    this.closest(".modal").style.display = "none";
  });
});


function approveAppointment(id) {
  alert("Appointment " + id + " approved!");
}

function rejectAppointment(id) {
  if (confirm("Are you sure you want to reject this appointment?")) {
    alert("Appointment " + id + " rejected!");
  }
}

function markAsCompleted(id) {
  alert("Appointment " + id + " marked as completed!");
}
