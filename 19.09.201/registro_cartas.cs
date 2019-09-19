using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Registro_cartas
{
    #region Registro_cartas
    public class Registro_cartas
    {
        #region Member Variables
        protected unknown _id;
        protected string _name;
        protected string _link;
        protected unknown _price;
        protected bool _activo;
        #endregion
        #region Constructors
        public Registro_cartas() { }
        public Registro_cartas(string name, string link, unknown price, bool activo)
        {
            this._name=name;
            this._link=link;
            this._price=price;
            this._activo=activo;
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
        public virtual string Link
        {
            get {return _link;}
            set {_link=value;}
        }
        public virtual unknown Price
        {
            get {return _price;}
            set {_price=value;}
        }
        public virtual bool Activo
        {
            get {return _activo;}
            set {_activo=value;}
        }
        #endregion
    }
    #endregion
}