
const inputfields = document.querySelector('.cv-form');
const output = document.querySelector('.output');


let inputShow = true

async function TextEditor(element){
    const newEditor =  await ClassicEditor
    .create(element,{
      toolbar: [ 'heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
    } )
    return newEditor
   
  }
  
  let Summary3;
  TextEditor(inputfields["Summary2"]).then(nEditor=>{
    Summary3 = nEditor
  })
  let Achievements2;
  TextEditor(inputfields["Achievements"]).then(nEditor=>{
    Achievements2 = nEditor
  })

  let Position_title2;
  TextEditor(inputfields["Position_title"]).then(nEditor=>{
    Position_title2 = nEditor
  })

  let Degree2;
  TextEditor(inputfields["Degree"]).then(nEditor=>{
    Degree2 = nEditor
  })

  let Skills2;
  TextEditor(inputfields["Skills"]).then(nEditor=>{
    Skills2 = nEditor
  })

  let Project2;
  TextEditor(inputfields["Project"]).then(nEditor=>{
    Project2 = nEditor
  })



function toggle(){
    if(inputShow){
        inputfields.style.display = "none"
         inputShow = false 
        output.innerHTML=`
        <div class="container8" style="background-color: azure;">
        <h1>${inputfields["Name"].value}</h1>
        <p>${inputfields["Email"].value}</p>
        <p>${inputfields["Phone"].value}</p>
        <p>${inputfields["LinkedIn"].value}</p>
        
        <hr>
        <h2>Summary</h1>
       ${Summary3.getData()}
        <div class="section">
            <h2>Professional Experience</h2>
            ${Position_title2.getData()}
        </div>

        <div class="section">
            <h2>Achievements</h2>
            ${Achievements2.getData()}
        </div>

        <div class="section">
            <h2>Eduactions</h2>
            ${Degree2.getData()}
        </div>
        <div class="section">
            <h2>Projects</h2>
            ${Project2.getData()}
        </div>

        <div class="section">
            <h2>Skills</h2>
            ${Skills2.getData()}
        </div>
    </div>
    <div class="btn">
        <button onclick="printCV()">Print</button>
   </div>
        `
    

        
    }else{
        inputfields.style.display =  "block"
        inputShow = true
        output.innerHTML=""
    }
}

function printCV(){
    window.print();
}