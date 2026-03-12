<!-- Language Selection Modal -->
<div class="modal fade" id="languageModal" tabindex="-1" aria-labelledby="languageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content language-modal-content">
            <div class="modal-header language-modal-header">
                <h5 class="modal-title" id="languageModalLabel">
                    <i class="fa-solid fa-globe me-2"></i>Select Your Language
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body language-modal-body">
                <div class="language-search-container">
                    <div class="language-search-wrapper">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        <input type="text" class="language-search-input" id="languageSearchInput" placeholder="Search for a language..." />
                    </div>
                </div>
                <div class="language-grid" id="languageGrid">
                    <!-- English -->
                    <button class="language-option" data-lang="en" onclick="changeLanguage('en')" title="English">
                        <span class="lang-flag">🇬🇧</span>
                        <span class="lang-code">EN</span>
                        <span class="lang-name">English</span>
                    </button>

                    <!-- Hindi -->
                    <button class="language-option" data-lang="hi" onclick="changeLanguage('hi')" title="हिंदी">
                        <span class="lang-flag">🇮🇳</span>
                        <span class="lang-code">HI</span>
                        <span class="lang-name">हिंदी</span>
                    </button>

                    <!-- Gujarati -->
                    <button class="language-option" data-lang="gu" onclick="changeLanguage('gu')" title="ગુજરાતી">
                        <span class="lang-flag">🇮🇳</span>
                        <span class="lang-code">GU</span>
                        <span class="lang-name">ગુજરાતી</span>
                    </button>

                    <!-- Spanish -->
                    <button class="language-option" data-lang="es" onclick="changeLanguage('es')" title="Español">
                        <span class="lang-flag">🇪🇸</span>
                        <span class="lang-code">ES</span>
                        <span class="lang-name">Español</span>
                    </button>

                    <!-- French -->
                    <button class="language-option" data-lang="fr" onclick="changeLanguage('fr')" title="Français">
                        <span class="lang-flag">🇫🇷</span>
                        <span class="lang-code">FR</span>
                        <span class="lang-name">Français</span>
                    </button>

                    <!-- German -->
                    <button class="language-option" data-lang="de" onclick="changeLanguage('de')" title="Deutsch">
                        <span class="lang-flag">🇩🇪</span>
                        <span class="lang-code">DE</span>
                        <span class="lang-name">Deutsch</span>
                    </button>

                    <!-- Arabic -->
                    <button class="language-option" data-lang="ar" onclick="changeLanguage('ar')" title="العربية">
                        <span class="lang-flag">🇸🇦</span>
                        <span class="lang-code">AR</span>
                        <span class="lang-name">العربية</span>
                    </button>

                    <!-- Chinese -->
                    <button class="language-option" data-lang="zh-CN" onclick="changeLanguage('zh-CN')" title="中文">
                        <span class="lang-flag">🇨🇳</span>
                        <span class="lang-code">ZH</span>
                        <span class="lang-name">中文</span>
                    </button>

                    <!-- Russian -->
                    <button class="language-option" data-lang="ru" onclick="changeLanguage('ru')" title="Русский">
                        <span class="lang-flag">🇷🇺</span>
                        <span class="lang-code">RU</span>
                        <span class="lang-name">Русский</span>
                    </button>

                    <!-- Portuguese -->
                    <button class="language-option" data-lang="pt" onclick="changeLanguage('pt')" title="Português">
                        <span class="lang-flag">🇵🇹</span>
                        <span class="lang-code">PT</span>
                        <span class="lang-name">Português</span>
                    </button>

                    <!-- Italian -->
                    <button class="language-option" data-lang="it" onclick="changeLanguage('it')" title="Italiano">
                        <span class="lang-flag">🇮🇹</span>
                        <span class="lang-code">IT</span>
                        <span class="lang-name">Italiano</span>
                    </button>

                    <!-- Japanese -->
                    <button class="language-option" data-lang="ja" onclick="changeLanguage('ja')" title="日本語">
                        <span class="lang-flag">🇯🇵</span>
                        <span class="lang-code">JP</span>
                        <span class="lang-name">日本語</span>
                    </button>

                    <!-- Korean -->
                    <button class="language-option" data-lang="ko" onclick="changeLanguage('ko')" title="한국어">
                        <span class="lang-flag">🇰🇷</span>
                        <span class="lang-code">KO</span>
                        <span class="lang-name">한국어</span>
                    </button>
                </div>
                <div class="language-no-results" id="languageNoResults" style="display: none;">
                    <i class="fa-solid fa-search"></i>
                    <p>No languages found</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function changeLanguage(lang) {
    // Method 1: Use Google Translate's internal API
    if (typeof google !== 'undefined' && google.translate && google.translate.TranslateService) {
        // Find and click the translate element to activate it
        const translateElement = document.querySelector('.goog-te-combo');
        if (translateElement) {
            // Set the value
            translateElement.value = lang;
            // Trigger change event multiple times to ensure it registers
            translateElement.dispatchEvent(new Event('change', { bubbles: true }));
            translateElement.dispatchEvent(new Event('click', { bubbles: true }));
            
            setTimeout(() => {
                translateElement.dispatchEvent(new Event('change', { bubbles: true }));
            }, 100);
        }
    }
    
    // Method 2: Use cookie-based approach for Google Translate
    if (lang === 'en') {
        // Remove Google Translate cookie to reset to English
        document.cookie = "googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        location.reload();
    } else {
        // Set the cookie for the selected language
        document.cookie = `googtrans=/en/${lang}; path=/;`;
        location.reload();
    }
    
    // Close the modal
    setTimeout(() => {
        const modalElement = document.getElementById('languageModal');
        if (modalElement) {
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        }
    }, 150);
}

// Language search functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('languageSearchInput');
    const languageGrid = document.getElementById('languageGrid');
    const languageOptions = document.querySelectorAll('.language-option');
    const noResults = document.getElementById('languageNoResults');
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            let visibleCount = 0;
            
            languageOptions.forEach(option => {
                const langName = option.querySelector('.lang-name').textContent.toLowerCase();
                const langCode = option.querySelector('.lang-code').textContent.toLowerCase();
                
                if (langName.includes(searchTerm) || langCode.includes(searchTerm) || searchTerm === '') {
                    option.style.display = 'flex';
                    visibleCount++;
                } else {
                    option.style.display = 'none';
                }
            });
            
            // Show/hide no results message
            if (visibleCount === 0 && searchTerm !== '') {
                noResults.style.display = 'flex';
            } else {
                noResults.style.display = 'none';
            }
        });
    }
    
    // Clear search when modal is closed
    const modal = document.getElementById('languageModal');
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function() {
            searchInput.value = '';
            searchInput.dispatchEvent(new Event('input'));
        });
    }
});
</script>
