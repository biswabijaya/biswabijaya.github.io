import java.io.*;
class quad
{
  void p(int a, int b, int c)
  {
    int res = b*b;
    double d = res-(4*a*c);
    if (d==0) {
      System.out.println("\nRoots are Real and Equal");
    }else if (d>0) {
      System.out.println("\nRoots are Real and Distinct");
    } else {
      System.out.println("\nRoots are Imaginary");
    }
  }
  public static void main(String Args[])
  {
    p(3,4,5);
  }
}
