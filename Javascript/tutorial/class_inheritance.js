class User {

    constructor(username, email, password) {
        this.username = username;
        this.email = email;
        this.password = password;
    }

    static countUsers() {
        console.log('There are 50 users');
    }

    register() {
        console.log(this.username + ' is now registered');
    }
}


// let bob = new User('bob', 'bob@email.com', 'password');
// bob.register();
// User.countUsers();


class Member extends User {
    constructor(username, email, password, memberPackage) {
      super(username, email, password);
      this.package = memberPackage;
    }

    getPackage(){
        console.log(this.username + ' is subscribed to the '+this.package+' package');
    }
}

let mike = new Member('mike', 'mike@email.com', '12345', 'standard');

// mike.getPackage();
mike.register();

