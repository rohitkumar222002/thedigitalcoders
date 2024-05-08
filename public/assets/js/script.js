let contactForm = document.querySelector('#contact-form');
let contactContainer = document.querySelector('.single-adderss-block');
let userName = contactForm.username;
let userEmail = contactForm.email;
let userPhone = contactForm.phone;
let userSubject = contactForm.subject;
let userMessage = contactForm.message;
document.querySelector('#contact-form').addEventListener('submit',(e)=>{
    e.preventDefault();
    const newStudent = addStudent(userName.value,userEmail.value,userPhone.value,userSubject.value,userMessage.value);
    createContactElements(newStudent);
    userName.value= "";
    userEmail.value="";
    userPhone.value="";
    userSubject.value="";
    userMessage.value="";
});

let students = JSON.parse(localStorage.getItem('students')) || [];
// let students = [];

const addStudent = (name,email,phone,subject,message)=>{
    students.push({
        name,
        email,
        phone,
        subject,
        message
    })
    localStorage.setItem('students',JSON.stringify(students));
    return {
        name,
        email,
        phone,
        subject,
        message
    };
}


const createContactElements = ({name,email,phone,subject,message})=>{
    const studentDiv = document.createElement('div');
    // let contactContainer = document.createElement('div');
    // console.log(std);
    let contactName = document.createElement('p');
    let contactEmail = document.createElement('p');
    contactName.innerText = name;
    contactEmail.innerText = email;
    studentDiv.append(contactName,contactEmail)
    contactContainer.appendChild(studentDiv);
}


students.forEach(createContactElements);


