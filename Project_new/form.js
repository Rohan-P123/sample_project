const Name=document.getElementById('name');
const Age=document.getElementById('age');
const Qualification=document.getElementById('qualifications');
const Profession=document.getElementById('profession');
const Email=document.getElementById('email');
const Mobile=document.getElementById('mobile');
const Aadhar=document.getElementById('aadhar');
const Pan=document.getElementById('pan');
const Description=document.getElementById('description');
const CompanySize=document.getElementById('companySize');
const TargetAudience=document.getElementById('targetAudience');
const Reason=document.getElementById('reason');
const Equity=document.getElementById('youridea');
const Budget=document.getElementById('budget');
const Income=document.getElementById('income');
const StartupLevel=document.getElementById('startupLevel');

function Check(){
    const Name = Name.value;
    const Age = Age.value;
    const Qualification = Qualification.value;
    const Profession = Profession.value;
    const Email = Email.value;
    const Mobile = Mobile.value;
    const Description = Description.value;
    const CompanySize = CompanySize.value;
    const TargetAudience = TargetAudience.value;
    const Reason = Reason.value;
    const Equity = Equity.value;
    const Budget = Budget.value;
    const Income = Income.value;
    const StartupLevel = StartupLevel.value;

    localStorage.setItem('Name',Name);
    localStorage.setItem('Age',Age);
    localStorage.setItem('Qualification',Qualification);
    localStorage.setItem('Profession',Profession);
    localStorage.setItem('Email',Email);
    localStorage.setItem('Mobile',Mobile);
    localStorage.setItem('Description',Description);
    localStorage.setItem('CompanySize',CompanySize);
    localStorage.setItem('TargetAudience',TargetAudience);
    localStorage.setItem('Reason',Reason);
    localStorage.setItem('Equity',Equity);
    localStorage.setItem('Budget',Budget);
    localStorage.setItem('Income',Income);
    localStorage.setItem('StartupLevel',StartupLevel);
}