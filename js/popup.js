document.getElementById('button').addEventListener('click',function() {
    document.querySelector('.bg-model').style.display = 'flex';
});
document.querySelector('.close').addEventListener('click',function() {
    document.querySelector('.bg-model').style.display = 'none';
});