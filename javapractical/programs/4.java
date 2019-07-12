import java.io.*;
class palin
{
  public static void main(int x)
  {
    int num=0;
    int temp=x;

    while(temp){
      num=num*10+(temp/10);
      temp/=10;
    }

    if (x==num) {
      System.out.println("Entered Number is Palindrome");
    } else {
      System.out.println("Entered Number is not Palindrome");
    }
  }
}
