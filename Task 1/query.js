const section=document.querySelector('section')// Select the first 'section' element in the document
const navLink=document.querySelector('header nav a')// Select the first anchor element inside 'nav' in the 'header'
window.onscroll=()=>{
    section.forEach(sec=>{// Loop through each 'section' element
        let top=window.scrollY;// Get the current vertical scroll position
        let offset=setInterval.offsetTop = 150;// Calculate the offset for each section (adjusted by 150 pixels)
        let height=sec.offsetHeight;
        let id=sec.getAttribute('id');
        // Check if the current scroll position is within the bounds of the section
        if(top>=offset && top< offset + height){
            navLink.forEach(links=>{
                links.classlis.remover('active')
                //add 'active' class to the navigation link that matches the current section
                document.querySelector('header nav a[href*='+id+']').classList.add('active')
            })
        }
    })
}


