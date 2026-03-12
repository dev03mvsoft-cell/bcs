
<!-- Inquiry Modal Logic -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inquiryModal = document.getElementById('inquiryModal');
        const openModalBtns = document.querySelectorAll('.open-inquiry-modal');
        const closeModalBtn = document.getElementById('closeInquiryModal');

        if (inquiryModal && openModalBtns.length > 0) {
            openModalBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    inquiryModal.style.display = 'flex';
                    document.body.style.overflow = 'hidden'; // Prevent scroll
                });
            });

            closeModalBtn.addEventListener('click', () => {
                inquiryModal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restore scroll
            });

            window.addEventListener('click', (e) => {
                if (e.target === inquiryModal) {
                    inquiryModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        }
    });
</script>

<!-- reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/api.js?render=6LeJHIcsAAAAAGZDDlV4F4QOdIW7__5j7qEEg455"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inquiryForm = document.getElementById('productInquiryForm');
        if (inquiryForm) {
            inquiryForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = inquiryForm.querySelector('.submit-inquiry-btn');
                const originalText = submitBtn.innerHTML;

                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processing...';
                submitBtn.disabled = true;

                grecaptcha.ready(function() {
                    grecaptcha.execute('6LeJHIcsAAAAAGZDDlV4F4QOdIW7__5j7qEEg455', {
                        action: 'product_inquiry'
                    }).then(function(token) {
                        document.getElementById('recaptcha_token_product').value = token;
                        inquiryForm.submit();
                    });
                });
            });
        }

        // Only keep modal open on error (so user can fix details)
        <?php if (isset($_SESSION['form_error'])): ?>
            const inquiryModal = document.getElementById('inquiryModal');
            if (inquiryModal) {
                inquiryModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        <?php endif; ?>
    });
</script>

<!-- Inquiry Modal Structure -->
<div class="inquiry-modal" id="inquiryModal">
    <div class="modal-content-card">
        <button class="modal-close-btn" id="closeInquiryModal">
            <i class="fas fa-times"></i>
        </button>

        <div class="modal-header-text mb-4 text-center">
            <h3 class="fw-bold text-dark mb-2">Product Inquiry</h3>
            <p class="text-muted small">Please provide your details and we'll reach out to you.</p>
        </div>

        <?php if (isset($_SESSION['form_success'])): ?>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: <?php echo json_encode($_SESSION['form_success']); ?>,
                        timer: 3000,
                        showConfirmButton: false
                    });
                });
            </script>
            <?php unset($_SESSION['form_success']); ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['form_error'])): ?>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: <?php echo json_encode($_SESSION['form_error']); ?>
                    });
                });
            </script>
            <?php unset($_SESSION['form_error']); ?>
        <?php endif; ?>
        <form id="productInquiryForm" action="forms-handler/handler.php" method="POST">
            <input type="hidden" name="form_type" value="product_inquiry">
            <input type="hidden" name="recaptcha_token" id="recaptcha_token_product">

            <!-- Honeypot -->
            <div style="display:none;">
                <input type="text" name="website_hp">
            </div>

            <div class="inquiry-form-group">
                <label class="inquiry-label">Full Name</label>
                <input type="text" name="name" class="inquiry-input" placeholder="e.g. John Doe" required>
            </div>
            <div class="inquiry-form-group">
                <label class="inquiry-label">Work Email</label>
                <input type="email" name="email" class="inquiry-input" placeholder="e.g. john@company.com" required>
            </div>
            <div class="inquiry-form-group">
                <label class="inquiry-label">Company Name</label>
                <input type="text" name="company" class="inquiry-input" placeholder="e.g. Acme Corp" required>
            </div>
            <?php if ($page !== 'products'): ?>
                <div class="inquiry-form-group">
                    <label class="inquiry-label">Total Employees</label>
                    <input type="number" name="employees" class="inquiry-input" placeholder="e.g. 50" required>
                </div>
            <?php endif; ?>
            <div class="inquiry-form-group">
                <label class="inquiry-label">Tell Us the Problem</label>
                <textarea name="problem" class="inquiry-input" rows="4" placeholder="Describe the challenges you're facing..." required></textarea>
            </div>
            <button type="submit" class="submit-inquiry-btn">Submit Inquiry</button>
        </form>
    </div>
</div>
