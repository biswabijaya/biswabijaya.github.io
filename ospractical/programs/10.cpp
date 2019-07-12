#include<iostream>
using namespace std;
void first(int nBlocks,int nProcess,int blockSize[],int processSize[]){
    for(int i=0;i<nProcess;i++){
        int max = blockSize[0];
        int pos = 0;

        for(int j=0;j<nBlocks;j++)
            if(max < blockSize[j]) { max = blockSize[j]; pos = j; } if(max >= processSize[i]){
                cout<<"\nProcess "<<i+1<<" is allocated to block "<<pos+1;
                blockSize[pos] = blockSize[pos]-processSize[i];
            } else cout<<"\nProcess "<<i+1<<" can't be allocated";
    }
}
void best(int nBlocks,int nProcess,int blockSize[],int processSize[]){
    for(int i=0;i<nProcess;i++){
        int min = 9999;
        bool flag = false;
        int pos=0;
        for(int j=0;j<nBlocks;j++) {
            if(min > blockSize[j] && processSize[i]<=blockSize[j]){
                min = blockSize[j];
                flag = true;
                pos = j;
            }
        }
        if(flag){
            blockSize[pos] = blockSize[pos] - processSize[i];
            cout<<"\n\n Process "<<i+1<<" is allocated to Block "<<pos+1;
        }
        else cout<<"\n Process "<<i+1<<" cannot be allocated";
        cout<<"\n Remaining Block size\n";
        for(int j=0;j<nBlocks;j++)
            cout<<" "<<blockSize[j];
    }
}
void worst(int nBlocks,int nProcess,int blockSize[],int processSize[]){
    for(int i=0;i<nProcess;i++){
        int max = blockSize[0];
        int pos = 0;

        for(int j=0;j<nBlocks;j++)
            if(max < blockSize[j]) { max = blockSize[j]; pos = j; } if(max >= processSize[i]){
                cout<<"\nProcess "<<i+1<<" is allocated to block "<<pos+1;
                blockSize[pos] = blockSize[pos]-processSize[i];
            }else cout<<"\nProcess "<<i+1<<" can't be allocated";
    }
}
int main ()
{
    int ch,nBlocks,nProcess;
    cout<<" Enter the number of blocks: "; cin>>nBlocks;
    cout<<" Enter the number of processes: "; cin>>nProcess;

    int blockSize[nBlocks],processSize[nProcess];

    cout<<"\nEnter the size of "<<nBlocks<<" blocks: ";
    for(int i=0;i<nBlocks;i++) cin>>blockSize[i];

    cout<<"\nEnter the size of "<<nProcess<<" processes: ";
    for(int i=0;i<nProcess;i++) cin>>processSize[i];


    cout<<"\nChoose Page Memory Management Algorithm: ";
    cout << "\n1.First fit\n2.Best fit\n3.Worst fit\nEnter your choice:";
    cin >> ch;
    switch (ch)
        {
        case 1:
        first(nBlocks,nProcess,blockSize,processSize);
        break;
        case 2:
        best(nBlocks,nProcess,blockSize,processSize);
        break;
        case 3:
        worst(nBlocks,nProcess,blockSize,processSize);
        break;
        default: cout<<"\nInvalid choice";
    }

    cout<<"\nThank you for using Memory Management Algorithm";
    cout<<"\nMade by Biswabijaya Samal";
    cout<<"\nB.Tech. CSE - 2nd Year - SRM Univerity";
    return 0;
}
