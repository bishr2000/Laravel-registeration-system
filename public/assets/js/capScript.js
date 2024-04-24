var databox;
window.addEventListener( "pageshow", function ( event ) {
var historyTraversal = event.persisted ||
                        ( typeof window.performance != "undefined" &&
                            window.performance.navigation.type === 2 );
if ( historyTraversal ) {
    window.location.reload();
}
});
document.getElementById('btn').addEventListener('click', function(event){

    window.location.reload();
});
