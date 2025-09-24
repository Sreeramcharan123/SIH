<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sreeram Ayurveda Hospital</title>

    <!-- Fonts & Bootstrap -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f9f9f9;
        }

        .navbar {
            background: linear-gradient(90deg, #145A32, #1E8449);
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
            letter-spacing: 1px;
        }

        .hero-section {
            position: relative;
            text-align: center;
            color: white;
        }

        .hero-section img {
            height: 400px;
            object-fit: cover;
            width: 100%;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(20, 90, 50, 0.7);
            padding: 20px 40px;
            border-radius: 10px;
        }

        .hero-text h1 {
            font-weight: bold;
        }

        .doctor-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .doctor-card img {
            height: 250px;
            object-fit: cover;
        }

        .doctor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.2);
        }

        .doctor-card h5 {
            font-weight: bold;
            color: #145A32;
        }

        .doctor-card p {
            color: #555;
            font-size: 0.95rem;
        }

        .modal-header {
            background: linear-gradient(90deg, #145A32, #1E8449);
            color: white;
        }

        footer {
            background: linear-gradient(90deg, #145A32, #1E8449);
            color: white;
            padding: 40px 0;
        }

        footer a {
            color: #f1f1f1;
            margin: 0 10px;
            text-decoration: none;
        }

        footer a:hover {
            color: #FFD700;
        }
    </style>
</head>

<body class="antialiased">
    @if(session('success'))
    <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif


    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">🌿Ayurveda Hospital</a>
        </div>
    </nav>

    <div class="hero-section">
        <img src="https://www.sakrapremiumclinic.com/assets/images/Our-Doctors-mobile-banner.jpg" alt="Doctors Banner">

    </div>

    <div class="container mt-5 mb-5">
        <h2 class="text-center mb-4 fw-bold text-success">👩‍⚕️ Meet Our Ayurvedic Doctors</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">


            <div class="col">
                <div class="card doctor-card shadow">
                    <img src="https://thumbs.dreamstime.com/b/indian-beautiful-female-doctor-18398918.jpg" class="card-img-top" alt="Dr. Geetha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Geetha</h5>
                        <p class="card-text">🌿 Kaya Chikitsa (Balancing Tridosha - Internal Medicine)</p>
                        <a href="#" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>

            
            <div class="col">
                <div class="card doctor-card shadow">
                    <img src="https://www.shutterstock.com/image-photo/indian-young-lady-doctor-stethoscope-260nw-2528333405.jpg" class="card-img-top" alt="Dr. Varshini">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Varshini</h5>
                        <p class="card-text">👶 Kaumarbhritya (Pediatric Ayurveda & Child Care)</p>
                        <a href="#" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>

           
            <div class="col">
                <div class="card doctor-card shadow">
                    <img src="https://www.shutterstock.com/image-photo/indian-young-lady-doctor-stethoscope-260nw-2528333405.jpg" class="card-img-top" alt="Dr. Yamuna">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Yamuna</h5>
                        <p class="card-text">🌸 Stri Roga & Prasuti Tantra (Women's Health & Ayurveda Gynecology)</p>
                        <a href="#" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>

          
            <div class="col">
                <div class="card doctor-card shadow">
                    <img src="https://t4.ftcdn.net/jpg/02/57/48/67/360_F_257486764_GnnrHRNIBV93mAwR0aiNkS0x5UjDfIcl.jpg" class="card-img-top" alt="Dr. Ramesh">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Ramesh</h5>
                        <p class="card-text">🧘 Shalya Tantra (Bone & Joint Disorders, Ayurvedic Surgery)</p>
                        <a href="#" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card doctor-card shadow">
                    <img src="https://img.freepik.com/free-photo/portrait-smiling-young-doctor_171337-1532.jpg" class="card-img-top" alt="Dr. Suresh">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Suresh</h5>
                        <p class="card-text">🔥 Panchakarma Specialist (Detox, Shirodhara, Virechana, Basti)</p>
                        <a href="#" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Book Appointment</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('appointments.save') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Enter your age" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Preferred Time</label>
                            <input type="text" class="form-control" name="time" placeholder="Eg: 3pm-4pm" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">✅ Confirm Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
<style>
    .chatbot-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 350px;
        max-height: 500px;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
        display: none;
        flex-direction: column;
        overflow: hidden;
        z-index: 9999;
    }
    .chatbot-header {
        background: #198754;
        color: white;
        padding: 10px;
        font-weight: bold;
        text-align: center;
    }
    .chatbot-messages {
        flex: 1;
        padding: 10px;
        overflow-y: auto;
        font-size: 14px;
    }
    .chatbot-input {
        display: flex;
        border-top: 1px solid #ccc;
    }
    .chatbot-input input {
        flex: 1;
        border: none;
        padding: 10px;
    }
    .chatbot-input button {
        background: #198754;
        color: white;
        border: none;
        padding: 10px 15px;
    }
    .chatbot-toggle {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #198754;
        color: white;
        border: none;
        padding: 12px 18px;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
        z-index: 10000;
    }
</style>


<button class="chatbot-toggle" onclick="toggleChatbot()">💬</button>

<!-- Chatbot Box -->
<div class="chatbot-container" id="chatbot">
    <div class="chatbot-header">🤖 Sreeram Hospital Chatbot</div>
    <div class="chatbot-messages" id="chatbot-messages">
        <p><b>Bot:</b> Hello! How can I help you today?</p>
    </div>
    <div class="chatbot-input">
        <input type="text" id="chatbot-input" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>

<script>
    function toggleChatbot() {
        const chatbot = document.getElementById("chatbot");
        chatbot.style.display = (chatbot.style.display === "flex") ? "none" : "flex";
    }

    function sendMessage() {
        let input = document.getElementById("chatbot-input");
        let messages = document.getElementById("chatbot-messages");

        if (input.value.trim() === "") return;

        // User message
        messages.innerHTML += `<p><b>You:</b> ${input.value}</p>`;

        // Simple bot replies
        let reply = "Sorry, I didn’t understand that.";
        if (input.value.toLowerCase().includes("appointment")) {
            reply = "You can book an appointment by clicking on 'Book Appointment' button.";
        } else if (input.value.toLowerCase().includes("doctor")) {
            reply = "We have specialists in Ayurveda, Pediatrics, Gynecology, Ortho & Panchakarma.";
        } else if (input.value.toLowerCase().includes("hello")) {
            reply = "Hi! How are you feeling today?";
        }

        messages.innerHTML += `<p><b>Bot:</b> ${reply}</p>`;
        input.value = "";
        messages.scrollTop = messages.scrollHeight;
    }
</script>


    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <h5 class="fw-bold mb-3">🌿 Sreeram Ayurveda Hospital</h5>
            <p class="mb-2">📞 +91 9121015502 | 📧 appointments@sreeramlifehospital.com</p>
            <p class="mb-3">✨ Authentic Ayurveda | Panchakarma | Yoga | Wellness Care</p>
            <div>
                <a href="#">Facebook</a> |
                <a href="#">Instagram</a> |
                <a href="#">Twitter</a>
            </div>
            <p class="mt-3">&copy; {{ date('Y') }} Sreeram Ayurveda Hospital. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>