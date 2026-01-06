document.addEventListener('DOMContentLoaded', function() {
    const chatButton = document.getElementById('chatButton');
    const chatPopup = document.getElementById('chatPopup');
    const chatClose = document.getElementById('chatClose');

    chatButton.addEventListener('click', function() {
        chatPopup.classList.toggle('active');
    });

    chatClose.addEventListener('click', function() {
        chatPopup.classList.remove('active');
    });

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.chat-widget')) {
            chatPopup.classList.remove('active');
        }
    });
});