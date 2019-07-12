
#include <iostream>
using namespace std;

void print(int frames[], int nf){
    cout<<endl;
    for(int j=0;j<nf;j++){
        cout<<frames[j]<<" ";
    }
}
void FIFO(int n, int ar[], int nf){
    int frames[nf] = {0};
    int count = 0;
    cout<<"\nYour have choosen FIFO ";
    for(int i=0;i<n;i++ ){
      int found=0;
        for(int j=0;j<nf;j++){
          if(ar[i]==frames[j]){
            found=1;
          }
        }
      if (found==0) {
        frames[count]=ar[i];
        count++;
      }
      if (count>=nf) {
        count = 0;
      }
      print(frames,nf);
    }
    cout<<"\nWant to try again with same inputs ?";
}

void LRU(int n, int ar[], int nf){
    int frames[nf] = {0};
    int count[nf] = {0};
    cout<<"\nYour have choosen LRU ";
    for(int i=0;i<n;i++ ){
        int found=0;
        for(int j=0;j<nf;j++){
          if(ar[i]==frames[j]){
            found=1; count[j]++;
          }
        }
        int pos=0;
        int temp=count[pos];
        for(int j=0;j<nf;j++){
            if(count[j]<count[pos])
              pos=j;
        }
        if (found==0) {
            frames[pos]=ar[i];
            count[pos]++;
        }
        print(frames,nf);
    }
    cout<<"\nWant to try again with same inputs ?";
}

void OPTIMAL(int n, int ar[], int nf){
    int frames[nf] = {0};
    int count[nf] = {0};
    cout<<"\nYour have choosen OPTIMAL ";
    for(int i=0;i<n;i++ ){
        int found=0;
        for(int j=0;j<nf;j++){
          if(ar[i]==frames[j]){
            found=1;
          }
        }
        if (found==0) {
            for(int j=i+1,t=0; j<n,t<nf; j++,t++ ){
                for(int k=0; k<nf; k++){
                    if(ar[j]==frames[k]){
                     t++; count[k]++;
                    }
                }
            }

            int pos=0;
            int temp=count[pos];
            for(int j=0;j<nf;j++){
                if(count[j]<count[pos])
                pos=j;
            }
            frames[pos]=ar[i];
            count[pos]++;
        }
        print(frames,nf);
    }
    cout<<"\nWant to try again with same inputs ?";
}

int main()
{
    int n,nf;
    cout<<"Enter no of pages: "; cin>>n;
    int ar[n];
    cout<<"Enter the page reference string: ";
    for(int i=0;i<n;i++) cin>>ar[i];
    cout<<"\nEnter the number of frames: "; cin>>nf;
    cout<<"\nChoose Page Replacement Algorithm: ";
    int ch=1;
    while(ch){
        cout<<"\n1-FIFO\n2-LRU\n3-Optimal\n4-Exit ";
        cout<<"\nYour choice (1-4) : "; cin>>ch;
        switch(ch){
            case 1: FIFO(n, ar, nf); break;
            case 2: LRU(n, ar, nf); break;
            case 3: OPTIMAL(n, ar, nf); break;
            case 4: ch=0; break;
            default: cout<<"\nInvalid choice :( Please Retry ";
        }
    }
    cout<<"\n Thank you for using Page Replacement Algorithm";
    cout<<"\n Made by Biswabijaya Samal";
    cout<<"\n B.Tech. CSE - 2nd Year - SRM Univerity";
    return 0;
}
