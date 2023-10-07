/*const student = {
    Firstname: "Zahid",
    Lastname: "Laguna",
    Age: 22,
    college: "UTSA",
    major: "Computer Science",
    hobbies: ["movies", 'studying', 'reading'],
    Information: function() {
        return this.Firstname + " " + this.Lastname + " " + this.Age + " " + this.college + " " + this.major;
    },
    Myhobbies: function() {
        return this.hobbies;
    }
};
document.write(student.Information());
document.write(student.Myhobbies());
*/
class Student {
    constructor(Firstname, Lastname, Age, college, major, hobbies) {
        this.Firstname = Firstname;
        this.Lastname = Lastname;
        this.Age = Age;
        this.college = college;
        this.major = major;
        this.hobbies = hobbies;
    }
    Information() {
        alert(this.Firstname + " " + this.Lastname + " " + this.Age + " " + this.college + " " + this.major);
    }
    Myhobbies() {
        alert(this.hobbies);
    }
} 
Student.Firstname = "Zahid";
Student.Lastname = "Laguna";
Student.Age = 22;
Student.college = "UTSA";
Student.major = "Computer Science";
Student.hobbies = ["movies", 'studying', 'reading'];
Student.Information();
Student.Myhobbies();