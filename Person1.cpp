#include "Person1.h"


Person::Person()
{

	FirstName = "NULL";
	LastName = "NULL";
	Id = "0";
}

void Person::Set()
{
	cout << "Set First Name: " << endl;
	cin >> FirstName;
	if (FirstName[0] > 'a' && FirstName[0] < 'z')FirstName[0] -= 32;
	cout << "Set Last Name: " << endl;
	cin >> LastName;
	if (LastName[0] > 'a' && LastName[0] < 'z')LastName[0] -= 32;
	cout << "Set Id: " << endl;
	if (Id[0] > 'a' && Id[0] < 'z')Id[0] -= 32;
	cin >> Id;
}

string Person::GetFirstName()
{
	return FirstName;
}

string Person::GetLastName()
{
	return LastName;
}

string Person::GetId()
{
	return Id;
}

Person Person::operator=(const Person& Nperson)
{
	FirstName = Nperson.FirstName;
	LastName = Nperson.LastName;
	Id = Nperson.Id;
	return *this;
}


Person::Person(const Person& Cperson)
{
	FirstName = Cperson.FirstName;
	LastName = Cperson.LastName;
	Id = Cperson.Id;
}

void Person::Print()
{
	cout << "FirstName: " << FirstName << endl;
	cout << "LastName: " << LastName << endl;
	cout << "Id: " << Id << endl;
}
