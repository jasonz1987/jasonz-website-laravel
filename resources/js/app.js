require('./bootstrap');


try {
    function changeTheme(e){
        e.preventDefault()
        const htmlTag = document.getElementsByTagName("html")[0]

        if (htmlTag.className.includes("dark")) {
            htmlTag.className = 'light';
            localStorage.theme = 'light';
        } else {
            htmlTag.className = 'dark';
            localStorage.theme = 'dark';
        }
    }

    const switcher = document.getElementById("theme-mode");
    switcher?.addEventListener("click" ,changeTheme );

    const chk = document.getElementById('chk');

    chk.addEventListener('change',changeTheme);
} catch (err) {

}

// Get the button
let backBtn = document.getElementById("back-to-top-btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    if (backBtn) {
        scrollFunction();
    }
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        backBtn.style.display = "block";
    } else {
        backBtn.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
if (backBtn) {
    backBtn.addEventListener("click", backToTop);
}


function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


$(document).ready(function () {
    // 暗黑模式

    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }

    Prism.plugins.toolbar.registerButton('copy-to-clipboard', function (env) {
        var linkCopy = document.createElement('button');
        linkCopy.textContent = '复制代码';

        if (!ClipboardJS) {
            callbacks.push(registerClipboard);
        } else {
            registerClipboard();
        }

        return linkCopy;

        function registerClipboard() {
            var clip = new ClipboardJS(linkCopy, {
                'text': function () {
                    return env.code;
                }
            });

            clip.on('success', function() {
                linkCopy.textContent = '复制成功!';

                resetText();
            });
            clip.on('error', function () {
                linkCopy.textContent = '使用快捷键 Ctrl+C 复制';

                resetText();
            });
        }

        function resetText() {
            setTimeout(function () {
                linkCopy.textContent = '复制';
            }, 5000);
        }
    });
});
