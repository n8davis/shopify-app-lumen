function getUrlName(name, url) {
    name = name.replace(/[\[]/, '\\\[').replace(/[\]]/, '\\\]');
    let results = new RegExp('[?&]'+name+'=?([^&#]*)').exec(url || window.location.href);
    return results == null ? null : results[1] || true;
}