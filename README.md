# 🏥 BetterHealth Appointment System

**BetterHealth** is a simple, role-based appointment booking system built in PHP. It allows patients to schedule consultations, doctors to manage their availability, and administrators to oversee users and appointments.

---

## 🚀 Features

### 👥 User Roles
- **Patient** – Can register, book appointments, and view prescriptions.
- **Doctor** – Added by admin. Manages schedule, appointments and issues prescriptions.
- **Administrator** – Manages all users, appointments and system settings.

### 🔐 Authentication
- Patients register and log in.
- Doctors and admins are created by administrators.
- Passwords are securely hashed using PHP’s `password_hash()`.

### 📅 Appointments
- Patients can view available doctor slots and book appointments.
- Doctors/admins can confirm, reschedule, complete or cancel appointments.

### 🩺 Doctor Scheduling
- Doctors define:
  - Available days (Mon–Sun)
  - Start/end time
- Only available slots are shown to patients.

### 💊 Prescriptions
- Doctors can issue prescriptions after completing appointments.
- Linked to the patient and specific appointment.

### 🛠️ Admin Tools
- Ban/unban users, assign roles, delete accounts.
- Monitor all appointments and users.
- Basic system statistics.

---

## 🛠️ Tech Stack

- **Backend:** PHP 7+/8+
- **Database:** MySQL (via MySQLi)
- **Server:** Apache (XAMPP)
- **Frontend:** HTML, CSS , basic JS
- **Security:** Password hashing, session management, role-based access

---

