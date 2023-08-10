const section=document.querySelector('section')
const navLink=document.querySelector('header nav a')
window.onscroll=()=>{
    section.forEach(sec=>{
        let top=window.scrollY;
        let offset=setInterval.offsetTop = 150;
        let height=sec.offsetHeight;
        let id=sec.getAttribute('id');
        if(top>=offset && top< offset + height){
            navLink.forEach(links=>{
                links.classlis.remover('active')
                document.querySelector('header nav a[href*='+id+']').classList.add('active')
            })
        }
    })
}


