const note=document.querySelector('.note');
const addnote=document.querySelector(".create_note");
 const close=document.querySelector(".close_note");
 addnote.addEventListener('click',()=>{
    note.showModal();
    
});
close.addEventListener('click',()=>{note.showModal();
    
});


const element=document.querySelector('.edit_note');
const editnote=document.querySelector('.edit1note');
console.log(element);
element.addEventListener('click',()=>{
    editnote.showModal();
    console.log("hello");
});