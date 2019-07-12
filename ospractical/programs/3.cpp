#include<iostream>
using namespace std;
int main()
{
    int n,bursttime[20],waittime[30],turnaroundtime[30];
    int averagewt=0;
    int averagetat=0;
    int i,j;

    cout<<"Enter number of processes(maximum 30):";
    cin>>n;

    cout<<"\nEnter Process Burst Time\n";
    for(i=0;i<n;i++)
    {
        cout<<"Process["<<i+1<<"]:";
        cin>>bursttime[i];
    }

    waittime[0]=0;    //waiting time for first process is 0

    //calculating waiting time
    for(i=1;i<n;i++)
    {
        waittime[i]=0;
        for(j=0;j<i;j++)
            waittime[i]+=bursttime[j];
    }

    cout<<"\nProcess\t\tBurst Time\tWaiting Time\tTurnaround Time";

    //calculating turnaround time
    for(i=0;i<n;i++)
    {
        turnaroundtime[i]=bursttime[i]+waittime[i];
        averagewt+=waittime[i];
        averagetat+=turnaroundtime[i];
        cout<<"\nProcess["<<i+1<<"]"<<"\t\t"<<bursttime[i]<<"\t\t"<<waittime[i]<<"\t\t"<<turnaroundtime[i];
    }

    averagewt/=i;
    averagetat/=i;
    cout<<"\n\nAverage Waiting Time:"<<averagewt;
    cout<<"\nAverage Turnaround Time:"<<averagetat;

    return 0;
}
