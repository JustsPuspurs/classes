#include <iostream>
using namespace std;

class Dog {

public:
string name;

float age;

Dog(string n = "Unknown", float a = 1.0) : name(n), age(a) {}

void makeNoise() {

cout << "woof\n";

}
void celebrateBirthday() {
age++;
}

};

int main() {

Dog dog1("Reksis", 6);
cout << dog1.name << "'s age: " << dog1.age << endl;

dog1.makeNoise();
dog1.celebrateBirthday();
cout << "After celebrating birthday, " << dog1.name << "'s age: " << dog1.age << endl;
dog1.makeNoise();

return 0;

}
