#include<iostream>

using namespace std;

class Demo {
 public:
    inline void display();
};
int main(){
Demo d;
d.display();
}
inline void Demo ::display(){
cout<<"Hello world";
}
