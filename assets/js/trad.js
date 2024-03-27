  


function changeLang(lang) {
    
    let currentUrl = window.location.href;
    let newUrl;

    if (currentUrl.indexOf('?') !== -1) {
        newUrl = currentUrl.replace(/lang=\w\w/g, 'lang=' + lang);
    } else {
        newUrl = currentUrl + '?lang=' + lang;
    }

    window.location.href = newUrl;
}