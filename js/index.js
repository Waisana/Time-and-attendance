document.getElementById('import').addEventListener('click', function(){
    document.querySelector('.theimport').style.display ='flex';
});

document.querySelector('.close').addEventListener('click', function(){
    document.querySelector('.theimport').style.display ='none';
})

// -------------------for the export window -------------------

document.getElementById('export').addEventListener('click', function(){
    document.querySelector('.theExport').style.display ='flex';
});

document.querySelector('.btnclose').addEventListener('click', function(){
    document.querySelector('.theExport').style.display ='none';
})


// --------------------for the add department ---------------------



document.getElementById('deptadd').addEventListener('click', function(){
    document.querySelector('.add_dptment').style.display ='flex';
});

document.querySelector('.tocancel').addEventListener('click', function(){
    document.querySelector('.add_dptment').style.display ='none';
})

// --------------------for the usb window ---------------------

document.getElementById('usbman').addEventListener('click', function(){
    document.querySelector('.theusb').style.display ='flex';
});

document.querySelector('.btnclose1').addEventListener('click', function(){
    document.querySelector('.theusb').style.display ='none';
})

// --------------------for the usb window --------------------- 

document.getElementById('admin_modal').addEventListener('click', function(){
    document.querySelector('.theadmin').style.display ='flex';
});

document.querySelector('.btnclose2').addEventListener('click', function(){
    document.querySelector('.theadmin').style.display ='none';
})

document.getElementById('admin_modal2').addEventListener('click', function(){
    document.querySelector('.theadmin').style.display ='flex';
});

document.querySelector('.btnclose2').addEventListener('click', function(){
    document.querySelector('.theadmin').style.display ='none';
})
// .........................the dboptions........................

const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  }) 
})

// ..to close the pop up window.......

document.getElementById('dboptions').addEventListener('click', function(){
    document.querySelector('.thedboptions').style.display ='flex';
});

document.querySelector('.btnclose3').addEventListener('click', function(){
    document.querySelector('.thedboptions').style.display ='none';
})



// .................modal for the reports...............

document.getElementById('da_report').addEventListener('click', function(){
    document.querySelector('.thereport').style.display ='flex';
});

document.querySelector('.btnclose4').addEventListener('click', function(){
    document.querySelector('.thereport').style.display ='none';
})

// ................report Capturing the option....../

// get the value

function startnew() {
    var thecapture_txt =document.getElementById('report_select').value;

    if(thecapture_txt == 0){
        alert("Plaese !");
    }
    else{

        document.getElementById('decapt').value = thecapture_txt;
        document.querySelector('.select_thereport').style.display ='flex';

    }

    
}

// .....to close
document.querySelector('.select_btnclose4').addEventListener('click', function(){
    document.querySelector('.select_thereport').style.display ='none';
    
})



// --------------------------under users---------------------------------






