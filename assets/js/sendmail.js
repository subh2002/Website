/**
   * Send Mail Function
   */
 var btn = document.getElementById('submit');
 btn.addEventListener('click',function(e) {
     e.preventDefault()
     var name = document.getElementById('name').value;
     var email = document.getElementById('email').value;
     var subject = document.getElementById('subject').value;
     var message = document.getElementById('message').value;
     var body = 'name:' +name + '<br/>email: ' +email + '<br/>subject: ' +subject + '<br/>message: ' +message;
    Email.send({
   Host : "smtp.gmail.com",
   Username : "contact.ingotec@gmail.com",
   Password : "kkvxtqshvdbwavux",
   To : 'contact.ingotec@gmail.com',
   From : email,
   Subject : subject,
   Body : body
 }).then(
   message => alert(message)
 );
 })