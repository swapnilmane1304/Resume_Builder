
const display_name = document.querySelector('#fullname_dsp');
const display_designation = document.querySelector('#designation_dsp');
const display_phoneno = document.querySelector('#phoneno_dsp');
const display_email = document.querySelector('#email_dsp');
const display_address = document.querySelector('#address_dsp');
const display_skills = document.querySelector('#skillss_dsp');

const display_achievements = document.querySelector('#achievementss_dsp');
const display_education = document.querySelector('#educationss_dsp');
const display_experiences= document.querySelector('#experiencess_dsp');
const display_projects= document.querySelector('#projectss_dsp');
let display_image = document.getElementById("image_dsp");

//let input_image = document.getElementById("Photo");

//inputFile.onchange = function(){
  //  display_image.src = URL.createObjectURL(input_image.files[0]);
//}
function displayImage(event) {
    var image = document.getElementById('image_dspp');
    image.src = URL.createObjectURL(event.target.files[0]);
}


Name.addEventListener('input', function() {
    display_name.value = Name.value;
    
});

  

designation.addEventListener('input', function() {
    display_designation.value = designation.value;
    
});

Phone.addEventListener('input', function() {
    display_phoneno.value = Phone.value;
    
});

Email.addEventListener('input', function() {
    display_email.value = Email.value;
    
});

Adress.addEventListener('input', function() {
    address_dsp.value = Adress.value ;
   
});

Skills.addEventListener('input', function() {
    display_skills.value = Skills.value ;
   
});

Achievements.addEventListener('input', function() {
    display_achievements.value = Achievements.value ;
   
});
School_Name.addEventListener('input', function() {
    educationss_dsp.value = School_Name.value ;
   
});

Position_title,Company_Name,Job_Start_Date,Job_End_Date.addEventListener('input', function() {
    experiencess_dsp.value = Position_title.value +  " At " + Company_Name.value + " From "  + Job_Start_Date.value  + " To " + Job_End_Date.value ;
   
});

Project,Project_link.addEventListener('input', function() {
    projectss_dsp.value = Project.value + "  " + Project_link.value;
   
});
function printCV(){
    window.print();
}

