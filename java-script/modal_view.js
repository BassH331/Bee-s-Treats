const viewButtons = document.querySelectorAll('.view-btn');
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById("modalImage");
            const captionText = document.getElementById("caption");
            const closeBtn = document.querySelector(".close");
            
            // Open modal
            viewButtons.forEach(button => {
                button.addEventListener('click', function() {
                const imgSrc = this.closest('.cake-item').querySelector('img').src;
                const imgAlt = this.closest('.cake-item').querySelector('img').alt;
                
                document.body.classList.add('modal-open');
                modal.style.display = "block";
                modalImg.src = imgSrc;
                captionText.innerHTML = imgAlt;
                });
            });
            
            // Close modal
            function closeModal() {
                document.body.classList.remove('modal-open');
                modal.style.display = "none";
            }
            
            closeBtn.onclick = closeModal;
            
            window.onclick = function(event) {
                if (event.target == modal) {
                closeModal();
                }
            }
            
            document.addEventListener('keydown', function(event) {
                if (event.key === "Escape") {
                closeModal();
                }
            });