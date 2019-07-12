import java.io.*;
class matrice
{
  public static void main(String Args[])
  {
    int a[][]={{1,1},{2,2}};
    int b[][]={{3,3},{4,4}};
    int c[][]={0};

    for (int i=0;i<2;i++) {
      for (int j=0;j<2;j++ ) {
        int temp=0;
        for (int k=0;k<2;k++ ){
          temp+=a[j][k]*b[k][j];
        }
        c[i][j]=temp;
      }
    }

    //print result matrix
    for (int i=0;i<2;i++) {
      for (int j=0;j<2;j++ ) {
        System.out.print(c[i][j]+" ");
      }
      System.out.println(" ");
    }

  }
}
