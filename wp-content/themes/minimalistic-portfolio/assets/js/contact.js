(function() {
    // Initialize EmailJS with Mohammed Nihad's public key
    if (typeof emailjs !== 'undefined') {
        emailjs.init({
            publicKey: "YcJwrN5YTckjZ55kt",
        });
    }

    window.sendMail = function() {
        const nameEl = document.getElementById("name");
        const emailEl = document.getElementById("email");
        const addressEl = document.getElementById("address");
        const phoneEl = document.getElementById("phone");
        const messageEl = document.getElementById("message");

        if (!nameEl || !emailEl || !addressEl || !phoneEl || !messageEl) {
            console.error("Form inputs are missing from DOM.");
            return;
        }

        const name = nameEl.value.trim();
        const email = emailEl.value.trim();
        const address = addressEl.value.trim();
        const phone = phoneEl.value.trim();
        const message = messageEl.value.trim();

        if (!name || !email || !message) {
            showToast("Please complete the required fields: Name, Email, and Message.", "error");
            return;
        }

        const params = {
            name: name,
            from_name: name,
            email: email,
            from_email: email,
            reply_to: email,
            address: address,
            phone: phone,
            message: message,
        };

        const btn = document.querySelector(".contact-submit-btn");
        if (!btn) return;
        const originalText = btn.innerHTML;
        btn.innerHTML = "<i class='fas fa-spinner fa-spin'></i> Sending...";
        btn.disabled = true;

        emailjs.send("service_stk0ztj", "template_e5wrwnb", params)
            .then(() => {
                showToast("Message sent successfully! Thank you.", "success");
                nameEl.value = "";
                emailEl.value = "";
                addressEl.value = "";
                phoneEl.value = "";
                messageEl.value = "";
                btn.innerHTML = originalText;
                btn.disabled = false;
            })
            .catch((error) => {
                console.error("EmailJS failed to deliver message:", error);
                const errorMsg = error && error.text ? error.text : (error && error.message ? error.message : "Unknown error");
                showToast(`Delivery failed: ${errorMsg}. Please check your dashboard setup.`, "error");
                btn.innerHTML = originalText;
                btn.disabled = false;
            });
    };

    // Custom Toast Notification Helper
    function showToast(message, type = "success") {
        let container = document.querySelector(".toast-container");
        if (!container) {
            container = document.createElement("div");
            container.className = "toast-container";
            document.body.appendChild(container);
        }

        const toast = document.createElement("div");
        toast.className = `toast ${type}`;

        const iconClass = type === "success" ? "fas fa-check-circle" : "fas fa-exclamation-circle";
        toast.innerHTML = `
            <div class="toast-icon"><i class="${iconClass}"></i></div>
            <div class="toast-message">${message}</div>
        `;

        container.appendChild(toast);

        // Auto-remove toast after 4 seconds
        setTimeout(() => {
            toast.classList.add("hide");
            setTimeout(() => {
                toast.remove();
            }, 500);
        }, 4000);
    }
})();
