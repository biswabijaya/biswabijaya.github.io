import java.io.*;
class overload
{
  void print(int a){
    System.out.println(a+"is an integer");
  }
  void print(float a, float b){
    System.out.println((a+b)+"is a float result");
  }

  public static void main(String args[])
  {
    print(10);
    print(20.0,30.0)

  }
}
