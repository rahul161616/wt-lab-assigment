//Cube of number
#include <iostream>

using namespace std;
int Findcube(int x);
int main()
{
   cout <<Findcube(3);
    return 0;
}
inline int Findcube(int x){
return x*x*x;     //copies the content to main
}

