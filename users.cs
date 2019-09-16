using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Lista_cartas
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected unknown _id;
        protected string _name;
        protected string _username;
        protected string _password;
        protected bool _active;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string name, string username, string password, bool active)
        {
            this._name=name;
            this._username=username;
            this._password=password;
            this._active=active;
        }
        #endregion
        #region Public Properties
        public virtual unknown Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual bool Active
        {
            get {return _active;}
            set {_active=value;}
        }
        #endregion
    }
    #endregion
}