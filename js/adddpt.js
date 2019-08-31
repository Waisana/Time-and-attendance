// --------------------for the add department ---------------------



document.getElementById('deptadd').addEventListener('click', function(){
    document.querySelector('.add_dptment').style.display ='flex';
});

document.querySelector('.tocancel').addEventListener('click', function(){
    document.querySelector('.add_dptment').style.display ='none';
})