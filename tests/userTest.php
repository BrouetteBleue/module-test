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
    
}