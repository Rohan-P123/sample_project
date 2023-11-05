const form=document.getElementById('form');
const Name=document.getElementById('name');
const Age=document.getElementById('age');
const Occupation=document.getElementById('Occupation');
const Gender=document.getElementById('gender');
const Email=document.getElementById('email');
const PhoneNo=document.getElementById('phoneno');
const Startideas=document.getElementById('youridea');

form.addEventListener('submit',function(e){
    e.preventDefault();
    const Name = Name.value;
    const Age = Age.value;
    const Occupation = Occupation.value;
    const Gender = Gender.value;
    const Email = Email.value;
    const PhoneNo = PhoneNo.value;
    const Startideas = Startideas.value;

    localStorage.setItem('Name',Name);
    localStorage.setItem('Age',Age);
    localStorage.setItem('Occupation',Occupation);
    localStorage.setItem('Gender',Gender);
    localStorage.setItem('Email',Email);
    localStorage.setItem('PhoneNo',PhoneNo);
    localStorage.setItem('Startideas',Startideas);
})