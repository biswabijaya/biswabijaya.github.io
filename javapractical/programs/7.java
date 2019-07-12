import java.io.*;
class teacher
{
  string destination = "Teacher";
  string collegename = "SRM";
  void print()
  System.out.println("Teaching");
}
class PhysicsTeacher extends teacher
{
  String mainSubject = "Physics";
  public static void main(String args[]) {
    PhysicsTeacher obj = new PhysicsTeacher (System.in);
    System.out.println(obj.collegename);
    System.out.println(obj.destination);
    System.out.println(obj.mainSubject);
    obj.print();
  }
}
