import java.io.*;
import java.util.*;
class classobject
{
  int a,b;
  public static void main(int x)
  {
    classobject ob = new classobject(System.in);
    ob.a=5;
    ob.b=10;
    ob.a*=ob.b;

    int a =20, b=40;
    a=b-a;

    System.out.println("Class : a*b = "+ob.a);
    System.out.println("Local : a-b = "+a);


  }
}
