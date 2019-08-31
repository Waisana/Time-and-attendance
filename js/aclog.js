document.getElementById('modify_log_but').addEventListener('click', function(){
    document.querySelector('.modify_clog').style.display ='flex';
});

document.querySelector('.aclog_close').addEventListener('click', function(){
    document.querySelector('.modify_clog').style.display ='none'; 
})