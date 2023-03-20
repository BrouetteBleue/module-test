<?php 
use PHPUnit\Framework\TestCase;

require('src\user.php');
class UserTest extends TestCase {
    
    public function testIsValid() {
        // utilisateur valide
        $user1 = new User("john.doe@example.com", "Doe", "John", 30);
        $this->assertTrue($user1->isValid());
        
        // utilisateur sans email
        $user2 = new User(null, "Doe", "Jane", 20);
        $this->assertEquals(false,$user2->isValid()); // on essaie avec assertEquals la fonction est sencé retourner true/false 
        
        // utilisateur avec email invalide
        $user3 = new User("invalid-email", "Doe", "Jack", 15);
        $this->assertFalse($user3->isValid());
        
        // utilisateur sans nom
        $user4 = new User("jane.doe@example.com", null, "Jane", 25);
        $this->assertFalse($user4->isValid());
        
        // utilisateur sans prénom
        $user5 = new User("john.smith@example.com", "Smith", null, 18);
        $this->assertFalse($user5->isValid());
        
        // utilisateur avec âge invalide
        $user6 = new User("jane.smith@example.com", "Smith", "Jane", 10);
        $this->assertFalse($user6->isValid());
    }

    public function testEmail(){
        $email1 = new User("john.doe@example.fr", "Doe", "John", 30);
        // test if email is valid
        $this->assertEquals($email1->getEmail(),filter_var($email1->getEmail(), FILTER_VALIDATE_EMAIL));

    }

    public function testNom(){
        $user = new User("john.doe@example.com", "Doe", "John", 25);
        $this->assertIsString($user->getNom());

    }

    public function testPrenom() {
        $user = new User("john.doe@example.com", "Doe", "45John", 25);
        $this->assertIsString($user->getPrenom());
    }

    public function testAgeIsInt() {
        $user = new User("john.doe@example.com", "Doe", "John", 25);
        $this->assertIsInt($user->getAge());
    }

    public function testNomSansChiffres() {
        $user = new User("john.doe@example.com", "Doe", "John", 25);
        $this->assertMatchesRegularExpression('/^[^\d]*$/', $user->getNom());
    }

    public function testPrenomSansChiffres() {
        $user = new User("john.doe@example.com", "Do4e", "Joh-n", 25);
        $this->assertMatchesRegularExpression('/^[^\d]*$/', $user->getPrenom());
    }
    
}