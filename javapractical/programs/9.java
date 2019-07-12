import java.io.*;
class Fact
{
  void factorial(int n)
  {
    int t=1;
    for(int i = 1; i<=n; i++)
    t*=i;
    System.out.println("Factorial of "+n+ " = "+t);
  }
  public static void main(String args[])
  {
    int num = 10;
    System.out.println("Let the no be = "+num);
    factorial(num);
  }
}
