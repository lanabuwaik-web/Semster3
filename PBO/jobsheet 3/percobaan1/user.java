
public class user {
    public String Username;
    public String Email;
    public String Password;
    public String name;

    public user(String username, String email, String password, String name) {
        this.Username = username;
        this.Email = email;
        this.Password = password;
        this.name = name;
    }

    public void displayUserInfo() {
        System.out.println("Username: " + Username);
        System.out.println("Email: " + Email);
        System.out.println("Password: " + Password);
        System.out.println("Name: " + name);
    }
}