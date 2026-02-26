





// 1. فحص الرابط للبحث عن أخطاء
const urlParams = new URLSearchParams(window.location.search);
const errorType = urlParams.get('error');
const userName = urlParams.get('user');

// 2. معالجة حالة الخطأ (تغيير الـ Placeholder والحواف)
if (errorType) {
    let targetInput;
    let errorMessage;

    // تحديد الخانة والرسالة بناءً على نوع الخطأ القادم من PHP
    if (errorType === 'empty_user') {
        targetInput = document.getElementById('username'); // تصحيح الـ ID
        errorMessage = "يرجى إدخال اسم المستخدم!";
    } else if (errorType === 'empty_email' || errorType === 'invalid_email') {
        targetInput = document.getElementById('email');    // تصحيح الـ ID
        errorMessage = "الايميل غير صحيح أو مطلوب!";
    }

    if (targetInput) {
        targetInput.placeholder = errorMessage; // تأكد إن الاسم errorMessage
        targetInput.style.border = "2px solid #ff4b4b"; 
        targetInput.classList.add('input-error');
        targetInput.focus();
    }
}

// 3. كود رسالة الترحيب (الذي شرحناه سابقاً)
if (userName) {
    const nameSpot = document.getElementById('userNameSpot');
    const modal = document.getElementById('welcomeModal');
    if (nameSpot && modal) {
        nameSpot.innerText = userName;
        modal.style.display = 'flex';
    }
}

function closeModal() {
    document.getElementById('welcomeModal').style.display = 'none';
    window.history.replaceState({}, document.title, window.location.pathname);
}





